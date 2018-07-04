<?php

class Database{
    public function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "root", "webber");

    }

    public function __destruct(){
        mysqli_close($this->conn);

    }

    public function performQuery($query){
        return $this->conn->query($query);
    }

    public function getRandomEvents(){
        $n = $this->getNumberOfEvents();
        $randomIndicesArray = array(rand(1,$n));
        while(count($randomIndicesArray)<4){
            $x = rand(1,$n);
            if(array_search($x,$randomIndicesArray )===FALSE)
                array_push($randomIndicesArray, $x);
        }
        return $this->performQuery("select * from event where ID = " . $randomIndicesArray[0]. " OR ID = " . $randomIndicesArray[1]. " OR ID = " . $randomIndicesArray[2]. " OR ID = " . $randomIndicesArray[3]);

    }


    private function getNumberOfEvents(){
        $result = $this->performQuery("select count(ID) from Event");
        $row = $result->fetch_assoc();
            return intval($row["count(ID)"]);
        }

    public function userExists($username){

        $stmt = $this->conn->prepare("select username from User where Username = ?");


            $stmt->bind_param("s", $username);

            $stmt->execute();

            $stmt->bind_result($results);

        return($stmt->fetch());
    }

    public function createUser($username,$password,$name,$surname,$email,$pnum,$isAdmin){
        $stmt = $this->conn->prepare("insert into user (Username, Password, Name, Surname, Email, Phone_number, isAdmin) VALUES (?,?,?,?,?,?,?)");
        $isAdmin = intval($isAdmin);
        $stmt->bind_param("sssssii",$username,$password,$name,$surname,$email,$pnum,$isAdmin);
        $stmt->execute();
    }

    public function emailExists($email){
        $stmt = $this->conn->prepare("select email from User where email = ?");


        $stmt->bind_param("s", $email);

        $stmt->execute();

        $stmt->bind_result($results);

        return($stmt->fetch());
    }

    public function passwordCorrect($password,$username){
        $stmt = $this->conn->prepare("select password from User where password = ? and username = ?");


        $stmt->bind_param("ss", $password,$username);

        $stmt->execute();

        $stmt->bind_result($results);

        return($stmt->fetch());
    }

    public function isAdmin($username){
        $query = "select isAdmin from User where Username = '" .$username ."'";
        $results = $this->performQuery($query);
        $row = $results->fetch_assoc();
        return($row["isAdmin"]==true);
    }

    public function getEvent($id){
        $query= "select * from event where id =".$id;
        $results = $this->performQuery($query);
        return $results->fetch_assoc();
    }

    public function getPlace($place_name){
        $query= "select * from place where NAME ='".$place_name."'";
        $results = $this->performQuery($query);
        return $results->fetch_assoc();
    }

    public function getUser($username){
        $query= "select * from user where username ='".$username."'";
        $results = $this->performQuery($query);
        return $results->fetch_assoc();
    }

    public function ticketBought($eventID){
        $query = "Update Event
        Set num_of_tickets_left = (num_of_tickets_left - 1)
        Where ID = " .$eventID;

        $this->performQuery($query);
    }

    public function getRelatedEvents($username){
        $query = "select Event_ID from tickets_purchased where Username = \"".$username."\" GROUP BY Event_ID";
        $results = $this->performQuery($query);
        $a = array();
        for ($x = 0; $x < $results->num_rows; $x++) {
            $eventID = $results->fetch_assoc();
            array_push($a, $eventID["Event_ID"]);
        }

        $events = array();
        for ($x = 0; $x < count($a); $x++) {
            array_push($events,$this->getEvent($a[$x]) );
        }
        return $events;
    }

    public function getCreatedEvents($username){
        $query = "select ID from Event where Creator_Username = \"".$username."\"" ;
        $results = $this->performQuery($query);

        $a = array();
        for ($x = 0; $x < $results->num_rows; $x++) {
            $eventID = $results->fetch_assoc();
            array_push($a, $eventID["ID"]);
        }

        $events = array();
        for ($x = 0; $x < count($a); $x++) {
            array_push($events,$this->getEvent($a[$x]) );
        }
        return $events;
    }

    public function getNumOfTickets($eventID){
        $query = "select num_of_tickets_left from event where ID = " .$eventID ;
        $results = $this->performQuery($query);
        $row = $results->fetch_assoc();
        return intval($row["num_of_tickets_left"]);
    }

    public function getDateEventsFromTo($dateFrom, $dateTo){
        $query = "select * from Event where Date BETWEEN '".$dateFrom."' AND '".$dateTo."'";
        $results = $this->performQuery($query);

        $events = array();
        for ($x = 0; $x < $results->num_rows; $x++) {
            array_push($events,$results->fetch_assoc());
        }
        return $events;
    }

    public function getDateEventsFrom($dateFrom){
        $query = "select * from Event where Date >= '".$dateFrom."'";
        $results = $this->performQuery($query);

        $events = array();
        for ($x = 0; $x < $results->num_rows; $x++) {
            array_push($events,$results->fetch_assoc());
        }
        return $events;
    }

    public function getDateEventsTo($dateTo){
        $query = "select * from Event where Date <= '".$dateTo."'";
        $results = $this->performQuery($query);

        $events = array();
        for ($x = 0; $x < $results->num_rows; $x++) {
            array_push($events,$results->fetch_assoc());
        }
        return $events;
    }

    public function getCategoryEvents($category){
        $query = "select * from Event where Category ='".$category."'";
        $results = $this->performQuery($query);

        $events = array();
        for ($x = 0; $x < $results->num_rows; $x++) {
            array_push($events,$results->fetch_assoc());
        }
        return $events;
    }

    public function getPlaceEvents($place){
        $query = "select * from Event where Place_name ='".$place."'";
        $results = $this->performQuery($query);

        $events = array();
        for ($x = 0; $x < $results->num_rows; $x++) {
            array_push($events,$results->fetch_assoc());
        }
        return $events;

    }

    public function getCityEvents($city){
        $query = "select * from Place where City ='".$city."'";
        $results = $this->performQuery($query);

        $events = array();
        for ($x = 0; $x < $results->num_rows; $x++) {
            $place = $results->fetch_assoc();
           $events = array_merge($events,$this->getPlaceEvents($place["Name"]));
        }
        return $events;

    }

    public function getAllEvents(){
        $query = "select * from Event ";
        $results = $this->performQuery($query);

        $events = array();
        for ($x = 0; $x < $results->num_rows; $x++) {
            array_push($events,$results->fetch_assoc());
        }
        return $events;
    }

    public function getTicketsBoughtForEvent($username,$eventID){
        $query = "select count(ID) from Tickets_purchased where Event_ID = ".$eventID." AND Username = \"".$username."\"";
        $result = $this->performQuery($query);
        $row = $result->fetch_assoc();
        return intval($row["count(ID)"]);

    }

    public function ticketReturned($nTickets,$eventID){
        $query = "Update Event
        Set num_of_tickets_left = (num_of_tickets_left + ".$nTickets.")
        Where ID = " .$eventID;

        $this->performQuery($query);
    }

    public function createPlace($place,$city,$country){
        $stmt = $this->conn->prepare("insert into place (Name, City , Country ) VALUES (?,?,?)");
        $stmt->bind_param("sss",$place,$city,$country);
        $stmt->execute();
    }

    public function createEvent($name,$date,$time,$place,$link,$category,$numticket,$username,$price){
        $stmt = $this->conn->prepare("insert into event (Name, Date, Time, Place_Name, Picture, Category, num_of_tickets_left, Creator_username, Ticket_price) VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssisssisi",$name,$date,$time,$place,$link,$category,$numticket,$username,$price);
        $stmt->execute();
    }

}

<?php

/**
 * User class
 */
class UserModel
{
    use Model;

    protected $table = 'userr'; // Change to the correct table name
    protected $allowedColumns = [
        'Email',
        'Password'
    ];

    public function validate($data){
        $this->errors = [];
        
        if(empty($this->errors)){
            return true;
        }
        return false;
    }

    public function getNotifications(){
        $query = "
            SELECT *
            FROM NotificationLog
            WHERE Status <> 'deleted'
            ORDER BY NotificationTime DESC;
        ";
        return $this->query($query);
    }

    public function getNotificationsRead(){
        $query = "
            SELECT * FROM NOTIFICATIONLOG WHERE STATUS = 'read';
        ";
        return $this->query($query);
    }

    public function getNotificationsUnread(){
        $query = "
            SELECT * FROM NOTIFICATIONLOG WHERE STATUS = 'unread';
        ";
        return $this->query($query);
    }

    public function getAllNotifications(){
        $query = "
            SELECT * FROM NOTIFICATIONLOG;
        ";
        return $this->query($query);
    }

    public function markAllAsRead(){
        $query = "
        UPDATE NOTIFICATIONLOG
        SET STATUS = 'read'
        WHERE STATUS = 'unread';
        ";
        
        // Execute the query
        $result = $this->query($query);
        
        // Return true regardless of the query result
        return true;
    }

    public function markAllAsDeleted(){
        $query = "
        UPDATE NotificationLog
        SET Status = 'deleted'
        WHERE Status IN ('read', 'unread');
        ";
        
        // Execute the query
        $result = $this->query($query);
        
        // Return true regardless of the query result
        return true;
    }

    public function getUnreadCount(){
        $query = "
        SELECT COUNT(*) AS unread_count
        FROM NOTIFICATIONLOG
        WHERE status = 'unread';
        ";

        $result = $this->query($query); // This method executes the query and returns the result
        return $result[0]->unread_count; // Adjust based on your query method's return format
    }
    
    public function executeMonthlyNotif(){
        $query="
        SELECT generate_monthly_report_reminder();

        ";
        $this->query($query);
        return true;
    }   
    
}

abstract class RolesStudent {
    
    abstract static function selectStudentByRole($id); // SHOW ALL
}

class Roles extends RolesStudent{
    static function select() {
        global $conn;
        $sql = "SELECT * FROM roles";
        $result = $conn->query($sql);
        $arr = array();
        
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }

    static function selectStudentByRole($role){
        global $conn;
        $sql = "SELECT * FROM students WHERE role_fk = ". $role . ";";
        $result = $conn->query($sql);
        $arr = array();
        
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $arr[$key][] = $value;
                }
            }
        }
        return $arr;
    }
}
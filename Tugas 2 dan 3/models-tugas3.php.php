    static function selectById($id) {
        global $conn;
        $sql = "SELECT * FROM students WHERE id = ". $id . ";";
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
    } # Ditugaskan!
    
    static function selectWhere($clause) {
        global $conn;
        $sql = "SELECT * FROM students WHERE ". $clause . ";";
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
    } # Ditugaskan
    
    static function updateById($id, $name, $email, $role_fk) {
        global $conn;
        
        $sql = "UPDATE students SET id = ?, name = ?, email = ?, role_fk = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('isssi', $id, $name, $email, $role_fk, $id);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;
        return $result;
    } # Ditugaskan!
    
    static function updateWhere($clause) {
        global $conn;

        $sql = "UPDATE students ". $clause . ";";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->affected_rows > 0 ? true : false;

        return $result;
    } # Ditugaskan!
    
    static function deleteById($id) {
        global $conn;
        $sql = "DELETE FROM students WHERE id = " . $id . ";";
        $conn->query($sql);
        $result = $conn->affected_rows > 0 ? true : false;
        return $result;
    } # Ditugaskan!
    
    static function deleteWhere($clause) {
        global $conn;
        $sql = "DELETE FROM students WHERE" . $clause . ";";
        $conn->query($sql);
        $result = $conn->affected_rows > 0 ? true : false;
        return $result;
    } # Ditugaskan!

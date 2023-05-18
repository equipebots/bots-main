<?php
class Usuario {
    public function login($email, $senha) {
        global $conn;

        $sql = "SELECT * FROM usuarios WHERE email = ? AND senha = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $senha);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $dados = $result->fetch_assoc();

            $_SESSION['id'] = $dados['id'];
            return true;
        } else {
            return false;
        }
    }
        public function logget($id) {
            global $conn;
    
            $array = array();
    
            $query = "SELECT * FROM usuarios WHERE id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("s", $id);
            $stmt->execute();
    
            $result = $stmt->get_result();
    
            if ($result->num_rows > 0) {
                $array = $result->fetch_assoc();
            }
    
            return $array;
        }
    }
    
    
?>
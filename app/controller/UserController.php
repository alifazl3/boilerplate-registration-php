<?php
require_once ROOT_DIR . 'app/dataaccess/UserRepository.php';

class UserController {
    private $userRepository;

    public function __construct() {
        $this->userRepository = new UserRepository();
    }

    public function signup($username, $password) {
        $this->userRepository->signup($username, $password);
        $this->signin($username, $password);
    }

    public function signin($username, $password) {
        $userRepository = new UserRepository();
        $user = $userRepository->signin($username, $password);
        if ($user) {
            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;
            header("Location: /home");
        }
        echo "user not find";
        return false;
    }

    public function delete($id) {
        return $this->userRepository->delete($id);
    }

    public function signout() {
        session_destroy();

        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
    }

}

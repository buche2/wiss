package ch.wiss.exam.auth.service;

import ch.wiss.exam.auth.model.User;
import ch.wiss.exam.auth.repositories.UserRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.List;
import java.util.Optional;

@Service
public class UserService {

    @Autowired
    private UserRepository userRepository;


    public List<User> getUsers(){
        return userRepository.findAll();
    }

    public User login(String username, String password) throws Exception{
        Optional<User> userOptional = userRepository.findFirstByUsernameAndPassword(username,password);
        if(userOptional.isPresent()){
            return userOptional.get();
        }else{
            throw new Exception("Login fehlgeschlagen");
        }
    }


}

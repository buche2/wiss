package ch.wiss.exam.auth.rest;

import ch.wiss.exam.auth.service.UserService;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class User {

    @Autowired
    private UserService userService;

    @RequestMapping("/user")
    public ch.wiss.exam.auth.model.User login(String username, String password){
        try {
            return userService.login(username, password);
        }catch(Exception e){
            return null;
        }
    }

    @RequestMapping("/user/test")
    public void testCreate(){
        userService.createTestUser();
    }

}

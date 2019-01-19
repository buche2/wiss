package ch.wiss.exam.auth.rest;

import ch.wiss.exam.auth.service.UserService;
import io.swagger.annotations.Api;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

@RestController
@Api(value="Userservice", description="Operations pertaining to user in exam")
public class User {

    @Autowired
    private UserService userService;

    @RequestMapping(value = "/user", method = RequestMethod.POST)
    public ch.wiss.exam.auth.model.User login(String username, String password){
        try {
            return userService.login(username, password);
        }catch(Exception e){
            return null;
        }
    }

    @RequestMapping(value = "/user/{id}", method = RequestMethod.GET)
    public ch.wiss.exam.auth.model.User byId(@PathVariable Integer id){
        try {
            return userService.byId(id);
        }catch(Exception e){
            return null;
        }
    }


    @RequestMapping(value = "/user/test", method = RequestMethod.GET)
    public void testCreate(){
        userService.createTestUser();
    }

}

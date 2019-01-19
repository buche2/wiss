package ch.wiss.exam;

import ch.wiss.exam.auth.model.Grade;
import ch.wiss.exam.auth.model.Role;
import ch.wiss.exam.auth.model.User;
import ch.wiss.exam.auth.repositories.GradeRepository;
import ch.wiss.exam.auth.repositories.UserRepository;
import org.junit.Test;
import static org.junit.Assert.*;

import org.junit.runner.RunWith;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.test.autoconfigure.jdbc.AutoConfigureTestDatabase;
import org.springframework.boot.test.autoconfigure.orm.jpa.DataJpaTest;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.test.context.junit4.SpringRunner;
import org.springframework.transaction.annotation.Transactional;

import java.util.Optional;

//@SpringBootTest
@DataJpaTest
@AutoConfigureTestDatabase(replace = AutoConfigureTestDatabase.Replace.NONE)
@RunWith(SpringRunner.class)
public class UserTest {

    @Autowired
    private UserRepository userRepository;

    @Autowired
    private GradeRepository gradeRepository;

    @Test
    public void saveUser(){
        Grade grade = new Grade("UIFZ-725");

        User user = new User("Buchs", "Enrico", "buchs.enrico@gmail.com","password1234", grade);


        gradeRepository.save(grade);
        userRepository.save(user);

        assertNotNull(user.getId());
        assertNotNull(user.getGrade().getId());

        assertEquals(Role.STUDENT, user.getRole());

    }

    @Test
    public void login(){
        Grade grade = new Grade("UIFZ-725");

        User user = new User("Buchs", "Enrico", "buchs.enrico@gmail.com","password1234", grade);

        gradeRepository.save(grade);
        userRepository.save(user);


        Optional<User> userOptional = userRepository.findFirstByUsernameAndPassword("buchs.enrico@gmail.com", "password1234");

        assertTrue(userOptional.isPresent());


    }

}

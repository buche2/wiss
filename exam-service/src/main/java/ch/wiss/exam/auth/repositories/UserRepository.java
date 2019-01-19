package ch.wiss.exam.auth.repositories;

import ch.wiss.exam.auth.model.User;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.JpaSpecificationExecutor;
import org.springframework.data.repository.CrudRepository;

import javax.swing.text.html.Option;
import java.util.Optional;

public interface UserRepository extends JpaRepository<User, Integer>, CrudRepository<User,Integer>, JpaSpecificationExecutor {

    public Optional<User> findFirstByUsernameAndPassword(String username, String password);

}

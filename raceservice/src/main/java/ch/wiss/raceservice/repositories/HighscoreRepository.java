package ch.wiss.raceservice.repositories;

import ch.wiss.raceservice.model.Highscore;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.JpaSpecificationExecutor;
import org.springframework.data.repository.CrudRepository;

import java.util.List;

public interface HighscoreRepository extends JpaRepository<Highscore, Integer>, CrudRepository<Highscore,Integer>, JpaSpecificationExecutor {

    public List<Highscore> findAllByNameLike(String name);
}

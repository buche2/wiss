package ch.wiss.raceservice;

import ch.wiss.raceservice.model.Highscore;
import ch.wiss.raceservice.repositories.HighscoreRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

import java.util.ArrayList;
import java.util.List;

@SpringBootApplication
public class RaceserviceApplication implements CommandLineRunner {

    public static void main(String[] args) {
        SpringApplication.run(RaceserviceApplication.class, args);
    }

    @Autowired
    private HighscoreRepository highscoreRepository;

    @Override
    public void run(String... args) throws Exception {
        //Highscore h = new Highscore("Diego");
        //highscoreRepository.save(h);

        List<Highscore> highscoreList = highscoreRepository.findAllByNameLike("%Di%");
        

        for(Highscore h : highscoreList){
            System.out.println(h.getName());
        }

    }
}


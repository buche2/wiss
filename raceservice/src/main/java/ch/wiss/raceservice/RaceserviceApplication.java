package ch.wiss.raceservice;

import ch.wiss.raceservice.model.Highscore;
import ch.wiss.raceservice.repositories.HighscoreRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

@SpringBootApplication
public class RaceserviceApplication implements CommandLineRunner {

    public static void main(String[] args) {
        SpringApplication.run(RaceserviceApplication.class, args);
    }

    @Autowired
    private HighscoreRepository highscoreRepository;

    @Override
    public void run(String... args) throws Exception {
        Highscore h = new Highscore("Enrico");
        highscoreRepository.save(h);

    }
}


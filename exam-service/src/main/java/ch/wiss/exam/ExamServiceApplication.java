package ch.wiss.exam;

import ch.wiss.exam.model.Highscore;
import ch.wiss.exam.repositories.HighscoreRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

import java.util.List;

@SpringBootApplication
public class ExamServiceApplication implements CommandLineRunner {

    public static void main(String[] args) {
        SpringApplication.run(ExamServiceApplication.class, args);
    }

    @Autowired
    private HighscoreRepository highscoreRepository;

    @Override
    public void run(String... args) throws Exception {


    }
}


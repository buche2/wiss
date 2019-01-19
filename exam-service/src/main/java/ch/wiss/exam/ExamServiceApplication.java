package ch.wiss.exam;

import ch.wiss.exam.model.Highscore;
import ch.wiss.exam.repositories.HighscoreRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;

import java.util.List;

@SpringBootApplication
// implements CommandLineRunner
public class ExamServiceApplication {

    public static void main(String[] args) {
        SpringApplication.run(ExamServiceApplication.class, args);
    }

    /*
    @Override
    public void run(String... args) throws Exception {


    }*/
}


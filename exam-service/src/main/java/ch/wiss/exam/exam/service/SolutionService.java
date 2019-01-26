package ch.wiss.exam.exam.service;

import ch.wiss.exam.auth.model.Grade;
import ch.wiss.exam.auth.model.User;
import ch.wiss.exam.exam.model.Exam;
import ch.wiss.exam.exam.model.Solution;
import ch.wiss.exam.exam.repositories.SolutionRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import java.util.Date;
import java.util.List;

@Service
public class SolutionService {


    @Autowired
    private SolutionRepository solutionRepository;


    public List<Solution> getSolutions(){
        return solutionRepository.findAll();
    }


    public void createTestSolution(){
        Date date = new Date();
        Grade grade = new Grade("UIFZ-825");
        User user = new User("Buchs", "Enrico", "buchs.enrico@gmail.com","password1234", grade);
        Exam exam = new Exam(date, "Dateiname123", grade);
        Solution solution = new Solution("Loesung123", date, user);

        solutionRepository.saveAndFlush(solution);
    }
}

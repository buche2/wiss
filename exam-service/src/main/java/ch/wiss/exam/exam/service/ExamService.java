package ch.wiss.exam.exam.service;

import ch.wiss.exam.auth.model.Grade;
import ch.wiss.exam.auth.model.User;
import ch.wiss.exam.auth.repositories.GradeRepository;
import ch.wiss.exam.exam.model.Exam;
import ch.wiss.exam.exam.repositories.ExamRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.jpa.domain.Specification;
import org.springframework.stereotype.Service;

import java.util.Date;
import java.util.List;

@Service
public class ExamService {

    @Autowired
    private ExamRepository examRepository;


    @Autowired
    private GradeRepository gradeRepository;

    public List<Exam> getExams(){
        return examRepository.findAll();
    }

    public List<Exam> getExamsByGrade(Grade grade){
        return examRepository.findAllByGrade(grade);
    }

    public void createTestExam(){

        Date date = new Date();
        Grade grade = new Grade("UIFZ-825");
        Exam exam = new Exam(date, "Dateiname123", grade);

        gradeRepository.saveAndFlush(grade);
        examRepository.saveAndFlush(exam);


    }
}

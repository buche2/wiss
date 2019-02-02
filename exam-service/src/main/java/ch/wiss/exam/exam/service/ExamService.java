package ch.wiss.exam.exam.service;

import ch.wiss.exam.auth.model.Grade;
import ch.wiss.exam.auth.model.User;
import ch.wiss.exam.auth.repositories.GradeRepository;
import ch.wiss.exam.exam.model.Exam;
import ch.wiss.exam.exam.repositories.ExamRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.jpa.domain.Specification;
import org.springframework.stereotype.Service;

import java.io.IOException;
import java.nio.charset.StandardCharsets;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.Base64;
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


    public Exam createExam(Exam exam){
        byte[] decodedImg = Base64.getDecoder().decode(exam.getFile().getBytes(StandardCharsets.UTF_8));
        Path destinationFile = Paths.get("/assets/exam", "test.zip");
        try {
            Files.write(destinationFile, decodedImg);
        } catch (IOException e) {
            e.printStackTrace();
        }
        return null;
    }

    public void createTestExam(){

        Date date = new Date();
        Grade grade = new Grade("UIFZ-825");
        Exam exam = new Exam(date, "Dateiname123", grade);

        gradeRepository.saveAndFlush(grade);
        examRepository.saveAndFlush(exam);


    }
}

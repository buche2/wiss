package ch.wiss.exam.exam.service;

import ch.wiss.exam.auth.model.Grade;
import ch.wiss.exam.exam.model.Exam;
import ch.wiss.exam.exam.repositories.ExamRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.jpa.domain.Specification;
import org.springframework.stereotype.Service;

import java.util.List;

@Service
public class ExamService {

    @Autowired
    private ExamRepository examRepository;

    public List<Exam> getExams(){
        return examRepository.findAll();
    }

    public List<Exam> getExamsByGrade(Grade grade){
        return examRepository.findAllByGrade(grade);
    }

}

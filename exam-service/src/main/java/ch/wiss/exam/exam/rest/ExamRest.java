package ch.wiss.exam.exam.rest;

import ch.wiss.exam.auth.model.Grade;
import ch.wiss.exam.exam.model.Exam;
import ch.wiss.exam.exam.service.ExamService;
import io.swagger.annotations.Api;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
@Api(value = "ExamService", description = "Operations with the exam")
public class ExamRest {

    @Autowired
    private ExamService examService;

    @RequestMapping(value = "/exam", method = RequestMethod.GET)
    public List<Exam> getExams(){
        return examService.getExams();

    }

    @RequestMapping(value = "/exam/{grade}", method = RequestMethod.POST)
    public List<Exam> getExamsByGrade(@PathVariable Grade grade){
        try {
            return examService.getExamsByGrade(grade);
        }catch(Exception e){
            return null;
        }
    }
}

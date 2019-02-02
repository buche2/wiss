package ch.wiss.exam.exam.rest;


import ch.wiss.exam.exam.model.Exam;
import ch.wiss.exam.exam.model.Solution;
import ch.wiss.exam.exam.service.SolutionService;
import io.swagger.annotations.Api;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.RestController;

import java.util.List;

@RestController
@Api(value="Solutionservice", description="Operations with solutions")
public class SolutionRest {

    @Autowired
    private SolutionService solutionService;

    @RequestMapping(value = "/solution/test", method = RequestMethod.GET)
    public void testCreate(){
        solutionService.createTestSolution();
    }

    @RequestMapping(value = "/solution", method = RequestMethod.GET)
    public List<Solution> getAll(){
        return solutionService.getSolutions();
    }
}

package ch.wiss.exam.exam.repositories;

import ch.wiss.exam.auth.model.Grade;
import ch.wiss.exam.exam.model.Exam;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.JpaSpecificationExecutor;
import org.springframework.data.repository.CrudRepository;

import java.util.List;

public interface ExamRepository extends JpaRepository<Exam, Integer>, CrudRepository<Exam, Integer>, JpaSpecificationExecutor {

    List<Exam> findAllByGrade(Grade grade);

}

package ch.wiss.exam.exam.repositories;

import ch.wiss.exam.exam.model.Exam;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.JpaSpecificationExecutor;
import org.springframework.data.repository.CrudRepository;

public interface ExamRepository extends JpaRepository<Exam, Integer>, CrudRepository<Exam, Integer>, JpaSpecificationExecutor {
}

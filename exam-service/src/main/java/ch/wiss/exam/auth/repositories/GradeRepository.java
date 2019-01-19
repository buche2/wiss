package ch.wiss.exam.auth.repositories;

import ch.wiss.exam.auth.model.Grade;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.JpaSpecificationExecutor;
import org.springframework.data.repository.CrudRepository;

public interface GradeRepository extends JpaRepository<Grade, Integer>, CrudRepository<Grade,Integer>, JpaSpecificationExecutor {
}

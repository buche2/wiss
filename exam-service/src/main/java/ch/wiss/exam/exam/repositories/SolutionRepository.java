package ch.wiss.exam.exam.repositories;

import ch.wiss.exam.exam.model.Solution;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.JpaSpecificationExecutor;
import org.springframework.data.repository.CrudRepository;

public interface SolutionRepository extends JpaRepository<Solution, Integer>, CrudRepository<Solution, Integer>, JpaSpecificationExecutor {
}

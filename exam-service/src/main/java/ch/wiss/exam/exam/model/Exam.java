package ch.wiss.exam.exam.model;

import ch.wiss.exam.auth.model.Grade;

import javax.persistence.*;
import java.util.Date;

@Entity
public class Exam {

    @Id
    @GeneratedValue(strategy = GenerationType.SEQUENCE, generator = "exam_seq")
    @SequenceGenerator(name = "exam_seq", sequenceName = "exam_seq")
    private Integer id;

    private Date date;

    private String file;

    @ManyToOne(optional = true, fetch = FetchType.EAGER)
    @JoinColumn(name = "gradeFk")
    private Grade grade;

    public Exam() {

    }

    public Exam(Date date, String file, Grade grade) {
        this.date = date;
        this.file = file;
        this.grade = grade;
    }

    public Integer getId() {
        return id;
    }

    public Date getDate() {
        return date;
    }

    public String getFile() {
        return file;
    }

    public Grade getGrade() {
        return grade;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public void setFile(String file) {
        this.file = file;
    }

    public void setGrade(Grade grade) {
        this.grade = grade;
    }
}

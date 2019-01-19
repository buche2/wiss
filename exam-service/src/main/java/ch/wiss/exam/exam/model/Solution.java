package ch.wiss.exam.exam.model;

import ch.wiss.exam.auth.model.Grade;
import ch.wiss.exam.auth.model.User;

import javax.persistence.*;
import java.util.Date;


@Entity
public class Solution {

    @Id
    @GeneratedValue(strategy = GenerationType.SEQUENCE, generator = "solution_seq")
    @SequenceGenerator(name = "solution_seq", sequenceName = "solution_seq")
    private Integer id;

    private String file;

    private Date date;


    public Solution() {

    }

    public Solution(String file, Date date, User student) {
        this.file = file;
        this.date = date;
    }

    public Integer getId() {
        return id;
    }

    public String getFile() {
        return file;
    }

    public void setFile(String file) {
        this.file = file;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

}

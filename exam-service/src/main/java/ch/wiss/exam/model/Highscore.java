package ch.wiss.exam.model;

import javax.persistence.*;

@Entity
public class Highscore {

    @Id
    @GeneratedValue(strategy = GenerationType.SEQUENCE, generator = "highscore_seq")
    @SequenceGenerator(name = "highscore_seq", sequenceName = "highscore_seq")
    private Integer id;

    private String name;


    public Highscore(String name) {
        this.name = name;
    }

    public Highscore() {
    }

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }
    
}

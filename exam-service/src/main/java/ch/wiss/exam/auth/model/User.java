package ch.wiss.exam.auth.model;

import javax.persistence.*;

@Entity
public class User {

    @Id
    @GeneratedValue(strategy = GenerationType.SEQUENCE, generator = "user_seq")
    @SequenceGenerator(name = "user_seq", sequenceName = "user_seq")
    private Integer id;

    private String name;
    private String firstname;
    private String username;
    private String password;

    @ManyToOne(optional = true, fetch = FetchType.EAGER)
    @JoinColumn(name = "gradeFk")
    private Grade grade;

    @Enumerated(EnumType.STRING)
    private Role role;

    public User(){

    }

    public User(String name, String firstname, String username, String password, Grade grade) {
        this.name = name;
        this.firstname = firstname;
        this.username = username;
        this.password = password;
        this.grade = grade;
        this.role = Role.STUDENT;
    }


    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getFirstname() {
        return firstname;
    }

    public void setFirstname(String firstname) {
        this.firstname = firstname;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public Grade getGrade() {
        return grade;
    }

    public void setGrade(Grade grade) {
        this.grade = grade;
    }

    public Role getRole() {
        return role;
    }

    public Integer getId() {
        return id;
    }
}

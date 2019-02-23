package ch.web4b.myapplication.dto.github;

import java.net.URL;
import java.time.LocalDate;

public class Job {

    private String id;
    private String type;
    private URL url;
    private String created_at;
    private String company;
    private URL company_url;
    private String location;
    private String title;
    private String description;
    private URL company_logo;

    public String getId() {
        return id;
    }

    public String getType() {
        return type;
    }

    public URL getUrl() {
        return url;
    }


    public String getCompany() {
        return company;
    }

    public URL getCompany_url() {
        return company_url;
    }

    public String getLocation() {
        return location;
    }

    public String getTitle() {
        return title;
    }

    public String getDescription() {
        return description;
    }

    public URL getCompany_logo() {
        return company_logo;
    }

    public String getCreated_at() {
        return created_at;
    }

    public void setCreated_at(String created_at) {
        this.created_at = created_at;
    }
}

package rf.permonlain.permkray.Models;

public class PostsInfo {
    private String name;
    private String description;
    private String mini_description;
    private String image_url;
    private String date;

    public PostsInfo() {
    }

    public PostsInfo(String name, String description, String mini_description, String image_url, String date) {
        this.name = name;
        this.description = description;
        this.mini_description = mini_description;
        this.image_url = image_url;
        this.date = date;
    }

    public String getName() {
        return name;
    }

    public String getDescription() {
        return description;
    }

    public String getMiniDescription() {
        return mini_description;
    }

    public String getImage_url() {
        return image_url;
    }

    public String getDate(){
        return date;
    }

    public void setName(String name) {
        this.name = name;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public void setMiniDescription(String mini_description) {
        this.mini_description = mini_description;
    }

    public void setDate(String date) {
        this.date = date;
    }

    public void setImage_url(String image_url) {
        this.image_url = image_url;
    }
}

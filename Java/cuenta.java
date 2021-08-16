public class Cuenta {
    Integer id;
    String name;
    String document;
    String email;
    String password;
    Integer number;

    public Cuenta(Integer id, String name, String document, String email, String password, Integer number){
        this.id = id;
        this.name = name;
        this.document = document;
        this.email = email;
        this.password = password;
        this.number = number;
    }
}

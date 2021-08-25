public class Uber_cars {
    private Integer id;
    private String license;
    private Cuenta driver;
    protected Integer pasageros;
    private String placa;

    public Uber_cars(String license, Cuenta driver) {
        this.license = license;
        this.driver = driver;
        /*pasageros = 4;
        System.out.println("pasageros: " + pasageros);*/
    }
    void printDataCars() {
        if(pasageros != null){
        System.out.println("ID: " + id + ", license: " + license + ", conductor: " + driver.name + ", documento: " + driver.document + ", pasageros: " + pasageros + " y placa:" + placa);
        }
    }

    //#region Getters and setters
    public Integer getPasageros(){
        return pasageros;
    }
    public void setPasageros(Integer pasageros){
        if(pasageros == 4){
        this.pasageros = pasageros;
        }else{
            System.out.println("Este auto necesita 4 pasageros");
        }
    }
    public Integer getId() {
        return id;
    }
    public void setId(Integer id) {
        this.id = id;
    }
    public String getLicense() {
        return license;
    }
    public void setLicense(String license) {
        this.license = license;
    }
    public Cuenta getDriver() {
        return driver;
    }
    public void setDriver(Cuenta driver) {
        this.driver = driver;
    }
    public String getPlaca() {
        return placa;
    }
    public void setPlaca(String placa) {
        this.placa = placa;
    }
    //#endregion
}

public class Uber_cars {
    Integer id;
    String license;
    Cuenta driver;
    Integer pasageros;
    String placa;

    public Uber_cars(String license, Cuenta driver) {
        this.license = license;
        this.driver = driver;
    }
    void printDataCars() {
        System.out.println("ID: " + id + ", license: " + license + ", conductor: " + driver.name + ", documento: " + driver.document + ", pasageros: " + pasageros + " y placa:" + placa);
    }
}

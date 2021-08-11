class UberPool extends Uber_cars {
    String marca;
    String model;

    public UberPool(String license, Cuenta driver, String marca, String model) {
        super(license, driver);
        this.marca = marca;
        this.model = model;

    }
}
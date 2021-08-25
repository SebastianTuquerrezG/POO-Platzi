class UberX extends Uber_cars {
    String marca;
    String model;

    public UberX(String license, Cuenta driver, String marca, String model){
        super(license, driver);
        this.marca = marca;
        this.model = model;
    }
    
    @Override
    void printDataCars() {
        super.printDataCars();
        System.out.println("Marca" + marca + "modelo" + model);
    }
}
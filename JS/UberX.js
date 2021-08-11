class UberX extends Uber_cars {
    constructor(license, driver, marca, modelo) {
        super(license, driver)
        this.marca = marca;
        this.modelos = modelo;
    }
}
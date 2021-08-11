class UberBlack extends Uber_cars {
    constructor(license, driver, typeCarAccepted, material) {
        super(license, driver)
        this.marca = typeCarAccepted;
        this.modelos = material;
    }
}
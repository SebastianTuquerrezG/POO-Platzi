class CuentaDriver extends Cuenta{
    Uber_cars carro;

    public CuentaDriver(Integer id, String name, String document, String email, String password, Integer number, Uber_cars carro){
        super(id, name, document, email, password, number);
        this.carro = carro;
    }
}

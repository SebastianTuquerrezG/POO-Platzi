class CuentaDriver extends Cuenta{
    constructor(id , name, document, email, password, number, carro){
        super(id , name, document, email, password, number)
        this.carro = carro;
    }
}

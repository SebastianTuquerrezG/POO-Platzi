class PagoPayPal extends Pagos{
    constructor(id, monto, email){
        super(id, monto)
        this.email = email;
    }
}
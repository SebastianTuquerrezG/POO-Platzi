class PagoCard extends Pagos{
    constructor(id, monto, number, ccv, date, nombre){
        super(id, monto)
        this.number = number;
        this.ccv = ccv;
        this.date = date;
        this.nombre = nombre;
    }
}
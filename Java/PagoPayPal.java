class PagoPayPal extends Pagos {
    String email;

    public PagoPayPal(Integer id, Integer monto, String email){
        super(id, monto);
        this.email = email;
    }
}
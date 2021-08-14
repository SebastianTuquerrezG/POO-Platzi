from pagos import Pagos

class PagoEfectivo(Pagos):

    def __init__(self, id, monto):
        super().__init__(id, monto)

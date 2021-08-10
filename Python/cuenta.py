class Cuenta:
    id       = int
    name     = str
    document = str
    email    = str
    password = str
    number   = str

    def __init__(self, name, document):
        self.name = name
        self.document = document
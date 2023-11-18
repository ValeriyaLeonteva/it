class MyClass:
    a = 0
    b = 0
    def __init__(self, a_, b_):
        self.a = a_
        self.b = b_
    def sum(self):
        return self.a + self.b
    def dec(self):
        return self.a - self.b
p = MyClass(3,5)
print('Результат сложения чисел ', p.sum())
print('Результат вычитания чисел ', p.sum())
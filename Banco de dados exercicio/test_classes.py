class Point:
    """Textos"""
    def __init__(self, x, y):
        self.x = x
        self.y = y

    def move(self, dx, dy):
        self.x += dx
        self.y += dy

    def __str__(self):
        return f"Point({self.x}, {self.y})"

blank = Point(0, 0)
print(blank)
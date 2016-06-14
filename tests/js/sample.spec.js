describe('add function', function() {
  it('returns sum of two numbers', function() {
    expect(add(1, 1)).toEqual(2);
  });

  it('returns a number', function() {
    expect(add(1, 2)).toEqual(jasmine.any(Number));
  });
});
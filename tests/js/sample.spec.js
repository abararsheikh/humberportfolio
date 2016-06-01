describe('add function', () => {
  it('returns sum of two numbers', () => {
    expect(add(1, 1)).toEqual(2);
  });

  it('returns a number', () => {
    expect(add(1, 2)).toEqual(jasmine.any(Number));
  })
});
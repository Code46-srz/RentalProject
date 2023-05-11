/**
 * Extracts a number from a value.
 * Cleans, strips, extracts.
 *
 * @param {*} value
 * @returns float
 */
 function cToNumber(value) {
    if (value == null) {
      return null;
      }
    value = value.toString();
  
    /// remove anything that is not a number or a period
    var numberString = value.replace(/[^\d.-]/g, '');
  
    var number = parseFloat(numberString);
  
    return number;
  }
  
  /**
   *
   * Extracts a number from a value.
   * Returns currency-formatted value;
   *
   * @param {*} value
   * @param {*} prefix
   * @returns string
   */
  function cToMoney(value, prefix = '$ ') {
    if (value == null) {
      return '';
      }
    var number = cToNumber(value);
  
    /// add commas
    var numberString = number.toLocaleString('en-US', { minimumFractionDigits: 2 });
  
    /// add prefix
    numberString = prefix + numberString;
  
    return numberString;
  }
  

import CountDown from 'react-native-countdown-component';

render() {
    return (
      <CountDown
        until={10}
        onFinish={() => alert('finished')}
        onPress={() => alert('hello')}
        size={20}
      />
    )
}
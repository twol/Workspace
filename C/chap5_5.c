#include <stdio.h>

int main(){
	char prefecture[10][10];
	int i;

	printf("日本の県名を10個入力してください\n");

	//県名を入力する
	for(i = 0; i < 10; i++){
		printf("%dつ目：", i + 1);
		scanf("%s", prefecture[i]);
	}

	printf("\n");//改行

	//入力した県名を出力する
	printf("入力した県名\n");
	for(i = 0; i < 10; i ++){
		printf("%s\n", prefecture[i]);
	}

	return 0;
}

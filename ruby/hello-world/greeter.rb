class Greeter
  attr_accessor :names

  def initialize(names = ["World"])
    @names = names
  end

  def say_hi
    if @names.nil?
      puts "..."
    elsif @names.respond_to?("each")
      @names.each do |name|
        puts "Hello #{name}"
      end
    end
  end

  def say_bye
    if @names.nil?
      puts "..."
    elsif @names.respond_to?("join")
      puts "Goodbye #{@names.join(", ")}"
    end
  end
end

if __FILE__ == $0
  g = Greeter.new
  g.say_hi
  g.say_bye

  g.names = ["Alice", "Bob"]
  g.say_hi
  g.say_bye

  g.names = nil
  g.say_hi
  g.say_bye
end

